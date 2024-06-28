<div id="product-list" class="w-full">
    @foreach($products->get() as $prod)
    <div class="p-4 m-3 rounded bg-gray-200 w-full flex flex-col items-start" id="product-{{ $prod->id }}">
        <div class="flex items-center w-full">
            <img src="{{ $prod->imgUrl }}" style="width: 100px; height: auto;" class="mr-4">
            <div class="flex-1">
                <h3 class="text-2xl">{{ $prod->name }}</h3>
                <div class="italic text-gray-700">{{ $prod->description }}</div>
            </div>

                <button hx-get="/api/products/{{ $prod->id }}/edit" 
                    hx-target="#edit-product-modal" 
                    hx-swap="innerHTML"
                    class=" text-black mr-5 rounded hover:bg-blue-200" 
                    onclick="showEditModal()"><svg class="h-8 w-8 text-blue-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                      </svg>
                      </button>
                <button hx-delete="/api/products/{{ $prod->id }}" 
                        hx-target="#product-{{ $prod->id }}" 
                        hx-swap="delete" 
                        hx-confirm="Are you sure you want to delete this product?"
                        class=" text-white rounded hover:bg-red-200"><svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg></button>

           
        </div>
        <div class="text-4xl text-red-900 self-center mt-4">{{ $prod->price }}</div>
    
    </div>
    @endforeach
    
</div>






<div id="imgUrl_Error" hx-swap-oob="true"></div>

<div id="name_Error" hx-swap-oob="true"></div>

<div id="description_Error" hx-swap-oob="true"></div>

<div id="price_Error" hx-swap-oob="true"></div>

<div id='addMessage' hx-swap-oob='true'>
    <div class='bg-green-200 text-center text-green-800 p-3 rounded'>
        The Product has been added successfully.
    </div>
</div> 

<script>
    function showEditModal() {
        document.getElementById('edit-product-modal').classList.remove('hidden');
    }
    

</script>





