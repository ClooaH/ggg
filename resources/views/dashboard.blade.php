<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    @if ($question)
                        QUESTION! -> {{ $question->question }}
                    @endif
                </div>
            </div>
            @foreach ($leads as $lead)
                <p>{{ $texts[mt_rand(0, 4)]->body }}</p>
                <p>"{{ $lead }}"</p>
            @endforeach

            @if ($errorCodes ?? '')
                @foreach ($errorCodes as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif



            <form action="/dashboard" method="POST">
                @csrf
                <input type="hidden" name="question_id" id="question_id" value="{{ $question->id }}">
                <input type="text" name="answer" id="answer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="/js/test.js"></script>
</x-app-layout>
