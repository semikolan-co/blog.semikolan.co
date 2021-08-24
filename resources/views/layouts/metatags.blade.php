<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset='UTF-8'>
<meta name='keywords' content='{{$keywords ?? ""}},blog,semikolan,technical,programming,blogs'>
<meta name='description' content='{{ $description ?? "Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of."}}'>
<meta name='subject' content='SemiKolan Blogs'>
<meta name='copyright' content='SemiKolan'>
<meta name='language' content='ES'>
<meta name='summary' content='Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'>
<meta name='Classification' content='Education/Programming'>
<meta name='author' content='SemiKolan, contact@semikolan.co'>
<meta name='designer' content='SemiKolan'>
<meta name='reply-to' content='contact@semikolan.co'>
<meta name='owner' content='SemiKolan'>
<meta name='category' content='Education'>
<meta name='subtitle' content='A Platform to create and find all your Technical solutions.'>
<meta name="monetization" content="$ilp.uphold.com/H82qqmD6EFq2">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="/public/img/favicon.png" type="image/x-icon">









<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}">
<meta itemprop="description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}">
<meta itemprop="image" content="{{$imagepath ??  ''}}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@semikolanco">
<meta name="twitter:title" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}">
<meta name="twitter:description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}">
<meta name="twitter:creator" content="@semikolanco">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{$imagepath ??  ''}}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://blog.semikolan.co/" />
<meta property="og:image" content="{{$imagepath ??  ''}}" />
<meta property="og:description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}" />
<meta property="og:site_name" content="SemiKolan Blogs | Never stop Learning" />
<meta property="article:published_time" content="{{$published_time ?? ''}}" />
<meta property="article:modified_time" content="{{$updated_time ?? ''}}" />
<meta property="article:section" content="Technology" />
<meta property="article:tag" content="Education" />
{{-- <meta property="fb:admins" content="Facebook numberic ID" /> --}}
