<div id="footer-top">
    <div class="container">
        <div class="row">
            <div class="col pt-4">
                <h4>dc comics</h4>
                <ul>
                    @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'] as $category)
                    <li>
                        <a href="">{{$category}}</a>
                    </li>
                    @endforeach
                </ul>


                <h4>shop</h4>
                <ul>
                    @foreach (['shop dc', 'shop dc collectibles'] as $shop)
                        <li>
                            <a href="">{{$shop}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div class="col pt-4">
                <h4>dc</h4>
                <ul>
                    @foreach (['terms of use', 'privacy policy (New)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'certifications', 'ratings', 'shop help', 'contact us'] as $item)
                    <li>
                        <a href="">{{ $item }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col pt-4">
                <h4>sites</h4>
                <ul>
                    @foreach (['dc', 'mad magazines', 'dc kids', 'dc universe', 'dc power visa']  as $site)
                    <li>
                        <a href="">{{ $site }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col col-6 img-container">

            </div>

        </div>

    </div>
</div>
