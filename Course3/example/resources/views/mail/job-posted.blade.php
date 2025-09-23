<div>
    <h2>
        {{ $job->title }}
    </h2>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <p>
        Congrats! Your job is now live on our website.
    </p>

    <p>
        <a href="{{ url('/jobs/' . $job->id) }}}}">View Your Job Listing</a>
    </p>
</div>
