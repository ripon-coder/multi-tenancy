<x-app-layout>
    <form method="POST" action="{{ route('tenancy.store') }}">
        @csrf
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Domain" name="domain">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="password" name="password">
        <input type="submit" value="Submit">
    </form>
</x-app-layout>
