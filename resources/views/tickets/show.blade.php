<x-app-layout>
    <div class="max-w-4xl mt-4 mx-auto p-6 bg-white rounded-lg shadow-lg">
        <!-- Ticket Title -->
        <h1 class="text-3xl font-semibold text-center text-gray-900 mb-4">{{ $ticket->title }}</h1>
        
        <!-- Ticket Details -->
        <div class="flex flex-col items-center space-y-3 mb-6">
            <p class="text-lg font-medium text-gray-700">{{ $ticket->status }} | {{ $ticket->priority }}</p>
            <p class="text-sm text-gray-500">{{ $ticket->created_at->format('F j, Y, g:i a') }}</p>
            <p class="text-md text-gray-800">{{ $ticket->user->name }}</p>
        </div>
        
        <!-- Ticket Description -->
        <div class="prose prose-lg text-gray-800 mb-6">
            <p>{{ $ticket->description }} </p>
        </div>

        <!-- Buttons -->
        <div class="flex justify-center space-x-4 mb-6">
            <a href="{{ route('tickets.index') }}">
                <button class="bg-green-600 font-bold text-center rounded-lg py-2 px-4 text-white">BACK TO TICKETS</button>
            </a>
            @can('update', $ticket)
                <a href="{{ route('tickets.edit', $ticket) }}">
                    <button class="bg-blue-600 font-bold text-center rounded-lg py-2 px-4 text-white">UPDATE</button>
                </a>
            @endcan
            
            @can('delete', $ticket)
                <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 font-bold text-center rounded-lg py-2 px-4 text-white">DELETE</button>
                </form>
            @endcan
        </div>

        <!-- Comments Section -->
            <div class="border-t border-gray-300 pt-6">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Comments</h2>

                <!-- Comment Form -->
                @if ($user->isAdmin())
                <form action="{{ route('tickets.comments.store', $ticket) }}" method="POST" class="space-y-4 mb-6">
                    @csrf
                    <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Add a comment..."></textarea>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Add Comment</button>
                </form>
                @endif
                <!-- Existing Comments -->
                @foreach ($ticket->comments as $comment)
                    <div class="border border-gray-300 rounded-lg p-4 mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-gray-700 font-semibold">{{ $comment->user->name }}</p>
                            <p class="text-sm text-gray-500">{{ $comment->created_at->format('F j, Y, g:i a') }}</p>
                        </div>
                        <p>{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>
    </div>
</x-app-layout>
