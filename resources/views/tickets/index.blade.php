<x-app-layout>
    <div class="flex flex-col justify-center p-5">
        <h1 class="text-3xl font-bold text-center">OPEN TICKETS</h1>    
        <form action="{{ route('tickets.index') }}" method="get">
            @csrf
            <select name="priority">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Filter</button>
        </form>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        @foreach ($tickets as $ticket)
            <div class="flex items-center justify-around border border-black p-4">
                <div class="flex flex-col space-y-2">
                    <h1 class="font-bold text-2xl uppercase">
                        {{ $ticket->title }}
                    </h1>
                    <p>{{ $ticket->description }}</p>
                    <div class="flex space-x-4">
                        <a href="{{ route('tickets.show', $ticket->id) }}">
                        <button class="bg-green-600 font-bold text-center rounded-lg py-2 px-4 text-white">VIEW</button>
                        </a>
                        @can('update', $ticket)
                        <a href="{{ route('tickets.edit', $ticket) }}">                              
                            <button class="bg-blue-500 font-bold text-center rounded-lg py-2 px-4 text-white">UPDATE</button>
                        </a>
                        @endcan
                       @can('delete', $ticket)
                    <form action="{{ route('tickets.destroy', $ticket) }}" method="POST"  onsubmit="return confirm('Are you sure you want to delete this ticket?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 font-bold text-center rounded-lg py-2 px-4 text-white">DELETE</button>
                    </form>
                    @endcan
                          
                    </div>
                    <p>{{ $ticket->user->name }}</p>
                </div>
                <p >{{ $ticket->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>
    <div class="p-6">
        {{ $tickets->links() }}
    </div>
</x-app-layout>