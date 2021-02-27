@extends('layouts.app')
@section('content')

    <main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="signin" class="signin">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="offset-lg-2 col-lg-7 col-sm-12 ">
                        <div class="containerpass">
                            <div class="section-title">
                                <p> Forum  </p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>

    </main>

     <!-- project team & activity start -->
     <div class="row">
                    <div class="col-md-4 portlets">
                        <!-- Widget -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left">Message</div>
                                <div class="widget-icons pull-right">
                                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="panel-body">
                                <!-- Widget content -->
                                <div class="padd sscroll">

                                    <ul class="chats">

                                        <!-- Chat by us. Use the class "by-me". -->
                                        <li class="by-me">
                                            <!-- Use the class "pull-left" in avatar -->
                                            <div class="avatar pull-left">
                                                <img src="img/user.jpg" alt="" />
                                            </div>

                                            <div class="chat-content">
                                                <!-- In meta area, first include "name" and then "time" -->
                                                <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                                                Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                        <!-- Chat by other. Use the class "by-other". -->
                                        <li class="by-other">
                                            <!-- Use the class "pull-right" in avatar -->
                                            <div class="avatar pull-right">
                                                <img src="img/user22.png" alt="" />
                                            </div>

                                            <div class="chat-content">
                                                <!-- In the chat meta, first include "time" then "name" -->
                                                <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                                Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                        <li class="by-me">
                                            <div class="avatar pull-left">
                                                <img src="img/user.jpg" alt="" />
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                                                Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                        <li class="by-other">
                                            <!-- Use the class "pull-right" in avatar -->
                                            <div class="avatar pull-right">
                                                <img src="img/user22.png" alt="" />
                                            </div>

                                            <div class="chat-content">
                                                <!-- In the chat meta, first include "time" then "name" -->
                                                <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                                Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                                <!-- Widget footer -->
                                <div class="widget-foot">

                                    <form class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Type your message here...">
                                        </div>
                                        <button type="submit" class="btn btn-info">Send</button>
                                    </form>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-8">
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="row">
                                    <div class="col-lg-8 task-progress pull-left">
                                        <h1>To Do Everyday</h1>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Jenifer smith
                                </span>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover personal-task">
                                <tbody>
                                    <tr>
                                        <td>Today</td>
                                        <td>
                                            web design
                                        </td>
                                        <td>
                                            <span class="badge bg-important">Upload</span>
                                        </td>
                                        <td>
                                            <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yesterday</td>
                                        <td>
                                            Project Design Task
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Task</span>
                                        </td>
                                        <td>
                                            <div id="work-progress2"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21-10-14</td>
                                        <td>
                                            Generate Invoice
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Task</span>
                                        </td>
                                        <td>
                                            <div id="work-progress3"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22-10-14</td>
                                        <td>
                                            Project Testing
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">To-Do</span>
                                        </td>
                                        <td>
                                            <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24-10-14</td>
                                        <td>
                                            Project Release Date
                                        </td>
                                        <td>
                                            <span class="badge bg-info">Milestone</span>
                                        </td>
                                        <td>
                                            <div id="work-progress4"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28-10-14</td>
                                        <td>
                                            Project Release Date
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">To-Do</span>
                                        </td>
                                        <td>
                                            <div id="work-progress5"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Last week</td>
                                        <td>
                                            Project Release Date
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">To-Do</span>
                                        </td>
                                        <td>
                                            <div id="work-progress1"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>last month</td>
                                        <td>
                                            Project Release Date
                                        </td>
                                        <td>
                                            <span class="badge bg-success">To-Do</span>
                                        </td>
                                        <td>
                                            <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <!--Project Activity end-->
                    </div>
                </div>
    <!-- Fin #main -->
@endsection 