<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="100,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms>

        <x-forms.input label="URL" name="url" placeholder="https://acne.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider />

        <x-forms.input label="Tags (Comma separated)" name="tags" placeholder="php, laravel, web" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>