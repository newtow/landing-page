
 
    <div class=" w-2/5 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mx-20">
        <form class="space-y-6" wire:submit.prevent="kirim_email">
            <h5 class="text-xl font-medium  font-monts text-gray-900 dark:text-white">Kirim pesan ke platfrom kami</h5>
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text"   wire:model ="nama" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-indigo/-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="masukan nama" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email"   wire:model ="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-indigo/-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="masukan email" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subjek</label>
                <input type="text"   wire:model ="subjek" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-indigo/-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="masukan subjek" required>
            </div>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan Anda</label>
            <textarea id="message"  wire:model ="pesan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis Pesanmu di sini......."></textarea>
            
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-indigo-900 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            </div>
         
        </form>
      </div>
 

