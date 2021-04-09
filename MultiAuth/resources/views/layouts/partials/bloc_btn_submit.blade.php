@if($type == "end")
    <div class="items-center block-valid-btn">
        <button class="bg-green-400 hover:bg-green-500 text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline btn-submit" type="button">
            <input type="submit" value="valider">
        </button>
        <div class="flex items-center justify-between">
            <button class="flex inline-flex text-red-400 hover:underline items-start py-2 mt-5 focus:outline-none focus:shadow-outline btn-prev" type="button">
                <span class="inline"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="15" class="mr-2 p-0 inline-block">
                    <path fillRule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                </svg>previous</span>
            </button>
            <button class="text-red-400 hover:underline  inline items-end py-2 mt-5 focus:outline-none focus:shadow-outline" type="button">
                <a href="{{ route('contributors.index') }}">Cancel registration</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25" class="mr-2 p-0 inline-block">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </div>
@elseif($type == "start")
    <div class="items-center block-valid-btn">
        <button class="bg-blue-500 hover:bg-blue-700 text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline btn-next" type="button">
            Next
        </button>
        <button class="text-red-400 hover:underline w-full py-2 mt-5 focus:outline-none focus:shadow-outline btn-cancel" type="button">
            <a href="{{ route('contributors.index') }}">Cancel registration</a>
        </button>
    </div>
@else
    <div class="items-center block-valid-btn">
        <button class="bg-blue-500 hover:bg-blue-700 text-white w-full font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline btn-next" type="button">
            Next
        </button>
        <div class="flex items-center justify-between">
            <button class="flex inline-flex text-red-400 hover:underline items-start py-2 mt-5 focus:outline-none focus:shadow-outline btn-prev" type="button">
                <span class="inline"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="15" class="mr-2 p-0 inline-block">
                    <path fillRule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                </svg>previous</span>
            </button>
            <button class="text-red-400 hover:underline  inline items-end py-2 mt-5 focus:outline-none focus:shadow-outline" type="button">
                <a href="{{ route('contributors.index') }}">Cancel registration</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="25" class="mr-2 p-0 inline-block">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </div>
@endif
