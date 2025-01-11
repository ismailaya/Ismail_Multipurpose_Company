@include('admin.partials.header')
<div class="page-header">
    <h3 class="page-title"> Profile </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            <div class="card">
                @livewire('profile.update-profile-information-form')
            </div>
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="card mt-4 pt-4">
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
                <x-section-border />
            </div>
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="card mt-4 pt-4">
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            </div>
        @endif
        <div class="card mt-4 pt-4">
            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
        </div>

        <!-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="card mt-4 pt-4">
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        @endif -->
    </div>

</div>

@include('admin.partials.footer')