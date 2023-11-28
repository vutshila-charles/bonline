<x-guest-layout>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                <div >
        
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div>
                        <x-label for="Price" value="{{ __('Price') }}" />
                        <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="name" />
                    </div>
                    <div>
                        <x-label for="Skuid" value="{{ __('Skuid') }}" />
                        <x-input id="skuid" class="block mt-1 w-full" type="text" name="skuid" :value="old('skuid')" required autofocus autocomplete="name" />
                    </div>
                    <div>
                        <x-label for="Price" value="{{ __('Token') }}" />
                        <x-input id="token" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="name" />
                    </div>
                    <x-button class="ms-4" type="button"  onclick="makeAPICall()">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function  makeAPICall()
        {
            
            var name = document.getElementById("name").value;
            var price = document.getElementById("price").value;
            var token = document.getElementById("token").value;
            var skuid = document.getElementById("skuid").value;
            var url = "http://localhost/api/products";
            if(token == ''){
                alert("Please enter the token");
                return false;
            }else{
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 201) {
                    var response = JSON.parse(this.responseText);
                    alert(response.message);
                }
                };
                xhttp.open("POST", url, true);
                xhttp.setRequestHeader("Content-type", "application/json");
                xhttp.setRequestHeader("Authorization", "Bearer "+token);
                xhttp.send(JSON.stringify({name:name,price:price,skuid:skuid}));
                window.location.href = "http://localhost/products";
            }
        }
    </script>
</x-guest-layout>