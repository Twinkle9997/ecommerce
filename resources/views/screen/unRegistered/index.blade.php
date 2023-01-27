@extends('includes/master')

@section('body')
    <x-common.navbar />

    @if (session()->get('success'))
        {{ session()->get('success') }}
    @endif


    {{-- @if (Auth::User())
        {{ Auth::User()->id }}
    @endif --}}

    <x-common.custom-carousel />
    <x-common.multiple-image-carousel />

    <x-common.multiple-image-carousel />
    <x-common.right-img title="Best Product"
        text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt hic, a at perferendis, mollitia repellendus error aspernatur accusantium labore pariatur iure, eos excepturi harum voluptatem saepe quis accusamus tempora?"
        buttonTextOne="Know More" buttonTextTwo="Buy Now" urlOne="www.google.com" urlTwo="www.google.com"
        img="/assets/images/products/fir.jpg" dir="rtl" />
    <x-common.multiple-image-carousel />

    <x-common.right-img title="Best Product"
        text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt hic, a at perferendis, mollitia repellendus error aspernatur accusantium labore pariatur iure, eos excepturi harum voluptatem saepe quis accusamus tempora?"
        buttonTextOne="Know More" buttonTextTwo="Buy Now" urlOne="www.google.com" urlTwo="www.google.com"
        img="/assets/images/products/fir.jpg" dir="ltr" />
    <x-common.multiple-image-carousel />

    <x-common.multiple-image-carousel />
    <x-common.right-img title="Best Product"
        text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt hic, a at perferendis, mollitia repellendus error aspernatur accusantium labore pariatur iure, eos excepturi harum voluptatem saepe quis accusamus tempora?"
        buttonTextOne="Know More" buttonTextTwo="Buy Now" urlOne="www.google.com" urlTwo="www.google.com"
        img="/assets/images/products/fir.jpg" dir="rtl" />
    <x-common.multiple-image-carousel />

    <x-common.right-img title="Best Product"
        text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sunt hic, a at perferendis, mollitia repellendus error aspernatur accusantium labore pariatur iure, eos excepturi harum voluptatem saepe quis accusamus tempora?"
        buttonTextOne="Know More" buttonTextTwo="Buy Now" urlOne="www.google.com" urlTwo="www.google.com"
        img="/assets/images/products/fir.jpg" dir="ltr" />
    <x-common.multiple-image-carousel />
@endsection
