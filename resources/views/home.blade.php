@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col">
    <div class="mt-4 sm:mt-8 mx-auto w-full sm:max-w-md text-center">
        <h1 class="font-medium text-gray-700 text-4xl">Livewire Dropdown</h1>
        <p class="mt-4 text-gray-500 leading-5">Dropdown search example using Laravel Livewire.</p>
    </div>

    <div class="mt-8 mx-auto w-full sm:max-w-4xl grid grid-cols-4 row-gap-4 col-gap-8">
        <div class="col-span-4">
            @livewire('dropdown')

            <div class="">
                <p class="mt-8 text-gray-600 leading-5">
                    Spicy jalapeno bacon ipsum dolor amet frankfurter ham hock andouille shank fatback cow cupim beef ribs porchetta prosciutto pork belly shankle pastrami tail venison. Shankle jowl drumstick corned beef pork belly. Pancetta kevin shoulder fatback short loin salami. Porchetta boudin pork loin doner.
                </p>

                <p class="mt-4 text-gray-600 leading-5">
                    Filet mignon turducken turkey, brisket beef ribs flank drumstick pork pork chop bresaola ham. Venison porchetta ham, beef drumstick strip steak swine. Andouille ground round porchetta salami meatloaf ham hock burgdoggen tenderloin. Short ribs pig meatloaf, rump capicola turducken drumstick pork loin salami flank pork turkey short loin landjaeger. Alcatra bacon chicken pork belly. Shoulder prosciutto burgdoggen tri-tip, leberkas flank meatball. Picanha ham pork belly ball tip tenderloin.
                </p>

                <p class="mt-4 text-gray-600 leading-5">
                    Shank beef landjaeger, pastrami ribeye tongue short ribs pig prosciutto rump kielbasa ham flank burgdoggen short loin. Pork chop pork loin landjaeger capicola tail. Doner burgdoggen alcatra pork loin corned beef rump turkey. Rump sausage meatball prosciutto. Hamburger cupim strip steak pork belly, brisket venison salami tenderloin ham hock. Alcatra frankfurter tail, burgdoggen pig short loin meatball meatloaf chuck.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
