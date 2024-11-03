<?php


declare(strict_types=1);

namespace App\Http\Livewire\Admin\Users\Edit;

use function add_user_log;
use App\Models\User;
use function flash;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use function view;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;

    public $name = '';

    public $username = '';

    public $email = '';
    public $facebook = '';
    public $twitter = '';
    public $instagram = '';
    public $bio = '';

    public $image = '';

    protected $listeners = ['refreshProfile' => 'mount'];

    public function mount(): void
    {
        parent::mount();

        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->facebook= 'https://web.facebook.com/'.$this->user->facebook;
        $this->twitter= 'https://twitter.com/'.$this->user->twitter;
        $this->instagram= 'https://www.instagram.com/'.$this->user->instagram;
        $this->bio= $this->user->bio;
    }

    public function render(): View
    {
        return view('livewire.admin.users.edit.profile');
    }

    protected function rules(): array
    {
        return [
            'name' => 'required|string',
            'username' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,gif|max:5120',
            'email' => 'required|email',
        ];
    }

    protected array $messages = [
        'name.required' => 'Name is required',
    ];

    /**
     * @throws ValidationException
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function update(): void
    {
        $this->validate();

        if ($this->image !== '') {
            Storage::disk('public')->delete($this->user->image);

            $token = md5(random_int(1, 10).microtime());
            $name = $token.'.jpg';
            $img = Image::make($this->image)->encode('jpg')->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->stream();

            Storage::disk('public')->put('users/'.$name, $img);

            $this->user->image = 'users/'.$name;
        }

        $this->user->name = $this->name;
        $this->user->username = $this->username;
        $this->user->slug = Str::slug($this->name);
        $this->user->email = $this->email;
        $this->user->facebook = $this->facebook;
        $this->user->twitter = $this->twitter;
        $this->user->instagram = $this->instagram;
        $this->user->bio = $this->bio;
        $this->user->save();

        add_user_log([
            'title' => 'updated '.$this->name."'s profile",
            'reference_id' => $this->user->id,
            'link' => route('admin.users.edit', ['user' => $this->user->id]),
            'section' => 'Users',
            'type' => 'Update',
        ]);

        flash('Profile Updated!')->success();

        $this->emit('refreshAdminSettings');
        $this->emit('refreshUserMenu');
    }
}
