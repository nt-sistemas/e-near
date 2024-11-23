<div class="flex justify-center w-full h-full items-center bg-slate-300">
    <x-card shadow class="mx-auto w-[450px]">
        <h4 class="text-3xl font-black text-secondary text-center mb-8"><span class="text-primary">e</span>Near</h4>

        @if ($message = session()->get('status'))
            <x-alert icon="o-exclamation-triangle" class="alert-error mb-4">
                {{ $message }}
            </x-alert>
        @endif

        @if ($errors->hasAny(['invalidCredentials', 'rateLimiter']))
            <x-alert icon="o-exclamation-triangle" class="alert-warning mb-4">
                @error('invalidCredentials')
                    <span>{{ $message }}</span>
                @enderror

                @error('rateLimiter')
                    <span>{{ $message }}</span>
                @enderror
            </x-alert>
        @endif

        <x-form wire:submit="login">
            <x-input label="Email" wire:model="email" />
            <x-input label="Password" wire:model="password" type="password" />
            <div class="w-full text-right text-sm">
                <a href="#" class="link link-primary text-xs">
                    Esqueci a minha senha?
                </a>
            </div>
            <x-slot:actions>
                <div class="w-full flex items-center justify-between">
                    <a wire:navigate href="#" class="link link-primary">
                        Quero me cadastrar
                    </a>
                    <div>
                        <x-button label="Login" class="btn-primary" type="submit" spinner="submit" />
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
