@extends('app')

@section('page', 'About Us')

@section('content')
    <div class="title">About PostalCache</div>
    <p>
        <strong>PostalCache</strong> is an application that we developed to help you plan out how you want to manage your finances. This
        program is simply for planning; it is unassociated with your bank accounts, so you won’t have to worry about
        messing up your finances if you store your money in the wrong place!
    </p>
    <p> This app allows you to enter money using a function called <strong>Cheques</strong>. These <strong>Cheques</strong> represent money you have
        recently acquired, such as a regular paycheque or a monetary gift. You distribute <strong>Cheques</strong> into <strong>Envelopes</strong>, which
        are collections of money intended for specific uses, such as spending on grocery shopping or saving for future
        vacations. <strong>Envelopes</strong> are located within <strong>Packages</strong>, which are collections of money intended for broader purposes,
        such as living expenses. You withdraw the money from your <strong>Envelopes</strong> once you spend it, and you can write a
        description for the withdrawal to remind yourself what you spent on.
    </p>
    <p>
        When you create an account on <strong>PostalCache</strong>, you will be able to complete a step-by-step tutorial to help you find
        your way around the app. Once you complete the tutorial, it will always be available to retake under your
        profile, just in case you need it!
    </p>
    <p>
        Even though you aren’t dealing with your real money, we care about your financial security. That’s why we made
        the app secure (you can tell by the "https" and the green lock in our URL!) Rest assured that we will protect
        the privacy and integrity of your data.
    </p>
    <p>
        PostalCache is a free service, so get started right away! Happy Managing!
    </p>
@endsection