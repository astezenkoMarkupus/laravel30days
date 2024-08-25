<x-layout>
  <x-slot:title>
    Registration
  </x-slot:title>

  <form method="POST" action="/register">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="firstname">First Name</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="firstname" id="firstname" autocomplete="given-name" required/>
              <x-form-error name="firstname"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="lastname">Last Name</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="lastname" id="lastname" autocomplete="family-name" required/>
              <x-form-error name="lastname"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
              <x-form-input type="email" name="email" id="email" autocomplete="email" required/>
              <x-form-error name="email"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input type="password" name="password" id="password" autocomplete="new-password" required/>
              <x-form-error name="password"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <div class="mt-2">
              <x-form-input
                  type="password"
                  name="password_confirmation"
                  id="password_confirmation"
                  autocomplete="new-password"
                  required
              />
              <x-form-error name="password_confirmation"/>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>
