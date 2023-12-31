@extends('client.layouts.masterlayout')
@section('content')
    <div class="tr-post-job page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="short-info code-edit-small">
                        <div class="section">
                            <span class="tr-title">Short Info</span> <br><br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Title for your job</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="code-edit">
                                        <span>ex, Human Resource Manager</span>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Job Category</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="dropdown tr-change-dropdown">
                                        <a data-toggle="dropdown" href="#" aria-expanded="true"><span class="change-text">Select a category</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tr-change">
                                            <li><a href="#">Select a category</a></li>
                                            <li><a href="#">Software Engineer</a></li>
                                            <li><a href="#">Project Manager</a></li>
                                            <li><a href="#">Graphics Designer</a></li>
                                        </ul>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row job-category">
                                <div class="col-sm-3">
                                    <label>Job Category</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="job-type">
                                        <input type="radio" name="radio1" value="full-time" id="full-time"> <label for="full-time">Full Time</label>
                                        <input type="radio" name="radio1" value="part-time" id="part-time"> <label for="part-time">Part Time</label>
                                        <input type="radio" name="radio1" value="freelance" id="freelance"> <label for="freelance">Freelance</label>
                                        <input type="radio" name="radio1" value="contract" id="contract"> <label for="contract">Contract</label>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Job Location</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="code-edit">
                                        <span>Type your address</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dropdown tr-change-dropdown">
                                                <a data-toggle="dropdown" href="#" aria-expanded="true"><span class="change-text">City</span><i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu tr-change">
                                                    <li><a href="#">City</a></li>
                                                    <li><a href="#">Chicago</a></li>
                                                    <li><a href="#">Denver</a></li>
                                                    <li><a href="#">New Orleans</a></li>
                                                </ul>
                                            </div>
                                        </div><br><br>
                                        <div class="col-sm-6">
                                            <div class="code-edit"><span>Postal Code</span></div>
                                        </div><br><br>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Salary Information</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="code-edit">
                                                <span>$5000</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="aegotiable">
                                                <span>Or</span>
                                                <input type="radio" name="radio2" value="aegotiable" id="aegotiable"> <label for="aegotiable">Negotiable</label>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Application Deadline</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="calendar">
                                        <input type="date" class="form-control" value="2017-06-25">
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row exprience-level">
                                <div class="col-sm-3">
                                    <label>Exprience Level</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="exprience">
                                        <input type="radio" name="radio3" value="entry-level" id="entry-level"> <label for="entry-level">Entry Level</label>
                                        <input type="radio" name="radio3" value="mid-level" id="mid-level"> <label for="mid-level">Mid Level</label>
                                        <input type="radio" name="radio3" value="mid-senior" id="mid-senior"> <label for="mid-senior">Mid-Senior Level</label>
                                        <input type="radio" name="radio3" value="top-level" id="top-level"> <label for="top-level">Top Level</label>
                                    </div>
                                </div><br><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Job Function</label>
                                </div><br><br>
                                <div class="col-sm-9">
                                    <div class="dropdown tr-change-dropdown">
                                        <a data-toggle="dropdown" href="#" aria-expanded="true"><span class="change-text">Graphics Design</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tr-change">
                                            <li><a href="#">Graphics Design</a></li>
                                            <li><a href="#">Project Manager</a></li>
                                            <li><a href="#">Software Engineer</a></li>
                                        </ul>
                                    </div>
                                </div><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="job-description section">
                        <span class="tr-title">Job Description</span><br><br>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Job Summary</label>
                            </div><br><br>
                            <div class="col-sm-9">
                                <div class="code-edit">
                                    <span>Write few lines about your Job</span>
                                </div>
                                <span class="characters-left">5000 Characters left</span>
                            </div><br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Key Responsibilities:</label>
                            </div><br><br>
                            <div class="col-sm-9">
                                <div class="code-edit">
                                    <span>Write few lines about your Job</span>
                                </div>
                                <span class="characters-left">5000 Characters left</span>
                            </div><br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Minimum Requirements:</label>
                            </div><br><br>
                            <div class="col-sm-9">
                                <div class="code-edit">
                                    <span>Write few lines about your Job</span>
                                </div>
                                <span class="characters-left">5000 Characters left</span>
                            </div><br><br>
                        </div>
                    </div>
                    <div class="premium-post section">
                        <span class="tr-title">Make Your Post Premium</span>
                        <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want. <a href="#">Learn more</a></p><br><br>
                        <ul class="tr-list">
                            <li>
                                <input type="radio" name="radio4" value="regular-post" id="regular-post">
                                <label for="regular-post">Regular Post</label>
                                <span>$20.00</span>
                            </li>
                            <li>
                                <input type="radio" name="radio4" value="urgent-job" id="urgent-job">
                                <label for="urgent-job">Urgent Job </label>
                                <span>$30.00</span>
                            </li>
                            <li>
                                <input type="radio" name="radio4" value="top-post" id="top-post">
                                <label for="top-post">Top Post for 7 days</label>
                                <span>$50.00</span>
                            </li>
                            <li>
                                <input type="radio" name="radio4" value="daily-bump" id="daily-bump">
                                <label for="daily-bump">Daily Bump Up for 7 days</label>
                                <span>$100.00</span>
                            </li>
                        </ul>
                    </div><br><br>
                    <div class="section agreement">
                        <label for="send">
                            <input type="checkbox" name="send" id="send">
                            You agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Trade to find a genuine buyer.
                        </label><br><br>
                        <div class="buttons">
                            <a href="#" class="btn btn-primary">Post Your Job</a>
                            <a href="#" class="btn button-cancle">Cancle</a>
                        </div>
                    </div><br><br>
                </div>
                <div class="col-md-3">
                    <div class="section quick-rules">
                        <span class="tr-title">Quick Rules</span>
                        <p>Posting an ad on <a href="#">Seeker.com</a> is free! However, all post must follow our rules:</p>
                        <ul class="tr-list">
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection