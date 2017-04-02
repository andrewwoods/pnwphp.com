@extends('layout')

@section('content')
<?php
    $cfpUrl = 'http://cfp.pnwphp.com';
?>
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 7th–9th, 2017 &#8226 Seattle, WA</h2>
        <a href="<?php echo $cfpUrl; ?>" target="_blank" class="btn btn-lg btn-info">
            Submit Your CFP
        </a>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP Conference</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="lead">
                The <strong>Pacific Northwest PHP Conference</strong> is a
                3-day event in Seattle, Washington for PHP and Web developers. 
                Our past conferences have included <strong>world renown 
                speakers</strong> from the PHP community, about a <strong>wide 
                range of topics</strong> &mdash; from APIs and CMS to unit 
                testing and version control.
                </p>

                <p class="lead">
                <em>Add your voice to the herd!</em> <strong>Become a part</strong> of our upcoming 2017 conference
                &mdash; <a href="<?php echo $cfpUrl; ?>">Submit your CFPs</a>
                to become a speaker.
                </p>

            </div>
            <div class="col-md-6">
                <!--
                        September 2017
                    Su Mo Tu We Th Fr Sa
                                    1  2
                     3  4  5  6  7  8  9
                    10 11 12 13 14 15 16
                    17 18 19 20 21 22 23
                    24 25 26 27 28 29 30
                -->
                <table class="table table-bordered">
                    <tr>
                        <th class="bg-info">Wed, Sep 6th</th>
                        <td>
                            <ul class="list-unstyled">
                                <li><strong>Meetup</strong></li>
                                <li><strong>Drinkup</strong></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">Thu, Sep 7th</th>
                        <td>
                            <ul class="list-unstyled">
                                <li><strong>Workshops</strong></li>
                                <li><strong>Speaker Dinner</strong></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">Fri, Sep 8th</th>
                        <td>
                            <ul class="list-unstyled">
                                <li><strong>Conference</strong></li>
                                <li><strong>Social</strong></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">Sat, Sep 9th</th>
                        <td>
                            <ul class="list-unstyled">
                                <li><strong>Conference</strong></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-info">Sun, Sep 10th</th>
                        <td>
                            <ul class="list-unstyled">
                                <li><strong>WurstConSEA</strong></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-md-6">
                <a href="https://twitter.com/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                </a>
                <a href="https://twitter.com/seaphp" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @SeaPHP
                </a>
            </div>
            <div class="col-md-6">
                &nbsp;
            </div>
        </div>
    </div>
</div>


<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>University of Washington</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="location-map"></div>
            </div>
            <div class="col-md-4">
                <p>
                    <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                </p>
                <p class="lead">
                    <a href="http://www.washington.edu/maps/#!/kne" target="_blank">University of Washington</a> is an excellent University, located in the heart of Seattle. The main conference will be held at <strong>Kane Hall</strong>, and the workshops in nearby <strong>Johnson Hall</strong>.
                </p>
            </div>
        </div>
    </div>
</div>

 {{-- @include('sections.sponsors') --}}

@stop
