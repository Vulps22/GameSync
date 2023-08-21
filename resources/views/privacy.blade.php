@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Privacy Policy</h1>
    <p class="mb-4">This privacy policy outlines how LFGameSync uses and protects any personal data collected from users.</p>

    <h2 class="text-xl font-bold mb-2">What data we collect</h2>
    <p class="mb-4">LFGameSync collects the following personal data from users:</p>
    <ul class="list-disc list-inside mb-4">
        <li>Discord ID</li>
        <li>Discord username</li>
        <li>Discord user token (generated by Discord)</li>
        <li>Steam ID</li>
    </ul>
    <p class="mb-4">We also collect data on which games users own and what Discord servers they are members of. This allows us to provide our services.</p>

    <h2 class="text-xl font-bold mb-2">How we use data</h2>
    <p class="mb-4">We use the data collected to:</p>
    <ul class="list-disc list-inside mb-4">
        <li>Identify users and link them to their Discord and Steam accounts</li>
        <li>Notify other users on shared Discord servers when a user owns a game being searched for</li>
        <li>Provide core functionality of the LFGameSync service</li>
    </ul>
    <p class="mb-4">Data is only shared with third parties as outlined in this policy.</p>

    <h2 class="text-xl font-bold mb-2">Lawful basis for processing</h2>
    <p class="mb-4">We collect and process this data based on user consent provided when signing in with Discord.</p>

    <h2 class="text-xl font-bold mb-2">Data sharing</h2>
    <p class="mb-4">We may share a user's Discord ID with Discord servers they have opted to share their library with. We also share the Discord user token with Discord as needed.</p>
    <p class="mb-4">No other sharing of personal data takes place.</p>

    <h2 class="text-xl font-bold mb-2">Data location</h2>
    <p class="mb-4">All data is stored on servers located in Germany.</p>

    <h2 class="text-xl font-bold mb-2">Data retention</h2>
    <p class="mb-4">We retain personal data until a user requests its removal by emailing webmaster@ajmcallister.co.uk. We will delete all data within 30 days of receiving the request.</p>

    <h2 class="text-xl font-bold mb-2">User rights</h2>
    <p class="mb-4">Users have the right to access, correct or delete their personal data at any time. This can be done through the LFGameSync website or by emailing webmaster@ajmcallister.co.uk.</p>

    <h2 class="text-xl font-bold mb-2">Cookie usage</h2>
    <p class="mb-4">Cookies are used to store login sessions and are required for site functionality. No user tracking takes place.</p>

    <h2 class="text-xl font-bold mb-2">How to opt out</h2>
    <p class="mb-4">To opt out of all data collection and use, email webmaster@ajmcallister.co.uk requesting account deletion.</p>

    <h2 class="text-xl font-bold mb-2">Contacting us</h2>
    <p class="mb-4">If you have any questions about this privacy policy or wish to exercise any of your rights, please contact the data controller at webmaster@ajmcallister.co.uk.</p>

    <h2 class="text-xl font-bold mb-2">Disclaimer</h2>
    <p>LFGameSync is not associated with Discord or Steam. References to Discord and Steam in this policy are solely for the purpose of explaining LFGameSync functionality.</p>
</div>
@endsection