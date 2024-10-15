<x-frontend-Layout>

    <x-frontend.hero />
    <x-frontend.promote />
    <x-frontend.about />
    <x-frontend.skills :skills="$skills" />
    <x-frontend.portfolio :skills="$skills" :projects="$projects" />
    <x-frontend.services />
    <x-frontend.contact />
</x-frontend-Layout>
