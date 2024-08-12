@extends('layouts.main')

@section('content')
    <section class="mt-8 max-w-4xl mx-auto">

        <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">Upcoming Event</h2>

        <div class="mt-4 p-6 bg-[#0086FF] flex justify-between rounded-md shadow-md outline">
            <div>
                <span class="px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase">Meetup</span>
                <div class="mt-1 text-white text-2xl font-bold">Cloud Native Mauritius Kick-Off</div>
                <div class="mt-3">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase">Location</span>
                    <h3 class="mt-1 text-white text-lg font-bold">SWAN Head-Office, Port-Louis</h3>
                </div>
            </div>

            <div class="bg-[#D62293] rounded-md p-4 outline h-[130px]">
                <div class="text-[16px] text-center font-bold uppercase text-white">August</div>
                <div class="grid place-items-center">
                    <div class="text-7xl text-white">31</div>
                </div>
            </div>
        </div>

        <h2 class="mt-16 ml-6 text-md text-slate-700 font-bold uppercase">Past Events</h2>

        <div class="mt-4 p-6 bg-gray-200 flex justify-between rounded-md shadow-md outline">
            <div>
                <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">Workshop</span>
                <div class="mt-1 text-gray-800 text-2xl font-bold">Kubernetes Workshop at DevCon 2024</div>
                <div class="mt-3">
                    <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">Location</span>
                    <h3 class="mt-1 text-gray-800 text-lg font-bold">Caudan Arts Centre, Port-Louis</h3>
                </div>
            </div>

            <div class="bg-[#0086FF] rounded-md p-4 outline h-[130px]">
                <div class="text-[16px] text-center font-bold uppercase text-white">July</div>
                <div class="grid place-items-center">
                    <div class="text-7xl text-white">19</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('head')
    <title>Cloud Native Mauritius</title>
@endsection
