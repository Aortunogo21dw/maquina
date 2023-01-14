<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¡Gracias por darte de alta! ¿Antes de empezar, podrías verificar tu cuenta de email clickando en el link que te acabamos de enviar? Si no has recivido el email, ¡te enviaremos otro encantados!') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Se ha enviado un nuevo link de verificación a tu email.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send', app()->getLocale()) }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar email de verificación.') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout', app()->getLocale()) }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Desconectarse.') }}
            </button>
        </form>
    </div>
</x-guest-layout>
