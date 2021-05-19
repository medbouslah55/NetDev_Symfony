<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backend/index.html.twig */
class __TwigTemplate_8e78ebac0ece729241cc7401fbdfbf34273a84a61991152beddb8ea1674cb0d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backend/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main class=\"content\">
        <div class=\"container-fluid p-0\">
            <div class=\"row mb-2 mb-xl-4\">
                <div class=\"col-auto d-none d-sm-block\">
                    <h3>Welcome back, Chris!</h3> </div>
                <div class=\"col-auto ml-auto text-right mt-n1\"> <span class=\"dropdown mr-2\">
      <button class=\"btn btn-light bg-white shadow-sm dropdown-toggle\" id=\"day\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"align-middle mt-n1\" data-feather=\"calendar\"></i> Today
      </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"day\">
        <h6 class=\"dropdown-header\">Settings</h6>
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
      </div>
    </span>
                    <button class=\"btn btn-primary shadow-sm\"> <i class=\"align-middle\" data-feather=\"filter\">&nbsp;</i> </button>
                    <button class=\"btn btn-primary shadow-sm\"> <i class=\"align-middle\" data-feather=\"refresh-cw\">&nbsp;</i> </button>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-primary\" data-feather=\"shopping-cart\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">2.562</h3>
                                    <div class=\"mb-0\">Sales Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-warning\" data-feather=\"activity\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">17.212</h3>
                                    <div class=\"mb-0\">Visitors Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-success\" data-feather=\"dollar-sign\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">\$ 24.300</h3>
                                    <div class=\"mb-0\">Total Earnings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-danger\" data-feather=\"shopping-bag\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">43</h3>
                                    <div class=\"mb-0\">Pending Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-none d-xxl-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-info\" data-feather=\"dollar-sign\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">\$ 18.700</h3>
                                    <div class=\"mb-0\">Total Revenue</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-8 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\"> <span class=\"badge badge-primary float-right\">Monthly</span>
                            <h5 class=\"card-title mb-0\">Total Revenue</h5> </div>
                        <div class=\"card-body\">
                            <div class=\"chart chart-lg\">
                                <canvas id=\"chartjs-dashboard-line\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\"> <span class=\"badge badge-info float-right\">Today</span>
                            <h5 class=\"card-title mb-0\">Daily feed</h5> </div>
                        <div class=\"card-body\">
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar-5.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Ashley Briggs\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">5m ago</small> <strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong>
                                    <br /> <small class=\"text-muted\">Today 7:51 pm</small>
                                    <br /> </div>
                            </div>
                            <hr />
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Chris Wood\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">30m ago</small> <strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline
                                    <br /> <small class=\"text-muted\">Today 7:21 pm</small>
                                    <div class=\"border text-sm text-muted p-2 mt-1\"> Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing... </div>
                                </div>
                            </div>
                            <hr />
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar-4.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Stacie Hall\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">1h ago</small> <strong>Stacie Hall</strong> posted a new blog
                                    <br /> <small class=\"text-muted\">Today 6:35 pm</small> </div>
                            </div>
                            <hr /> <a href=\"#\" class=\"btn btn-primary btn-block\">Load more</a> </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Calendar</h5> </div>
                        <div class=\"card-body d-flex\">
                            <div class=\"align-self-center w-100\">
                                <div class=\"chart\">
                                    <div id=\"datetimepicker-dashboard\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-none d-xl-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Weekly sales</h5> </div>
                        <div class=\"card-body d-flex\">
                            <div class=\"align-self-center w-100\">
                                <div class=\"py-3\">
                                    <div class=\"chart chart-xs\">
                                        <canvas id=\"chartjs-dashboard-pie\"></canvas>
                                    </div>
                                </div>
                                <table class=\"table mb-0\">
                                    <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th class=\"text-right\">Revenue</th>
                                        <th class=\"text-right\">Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-primary\"></i> Direct</td>
                                        <td class=\"text-right\">\$ 2602</td>
                                        <td class=\"text-right text-success\">+43%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-warning\"></i> Affiliate</td>
                                        <td class=\"text-right\">\$ 1253</td>
                                        <td class=\"text-right text-success\">+13%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-danger\"></i> E-mail</td>
                                        <td class=\"text-right\">\$ 541</td>
                                        <td class=\"text-right text-success\">+24%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-dark\"></i> Other</td>
                                        <td class=\"text-right\">\$ 1465</td>
                                        <td class=\"text-right text-success\">+11%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Appointments</h5> </div>
                        <div class=\"p-4 bg-light\">
                            <h2>You have a meeting today!</h2>
                            <p class=\"mb-0 text-sm\">Your next meeting is in 2 hours. Check your <a href=\"#\">schedule</a> to see the details.</p>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"timeline\">
                                <li class=\"timeline-item\"> <strong>Chat with Carl and Ashley</strong> <span class=\"float-right text-muted text-sm\">30m ago</span>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu...</p>
                                </li>
                                <li class=\"timeline-item\"> <strong>The big launch</strong> <span class=\"float-right text-muted text-sm\">2h ago</span>
                                    <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc...</p>
                                </li>
                                <li class=\"timeline-item\"> <strong>Coffee break</strong> <span class=\"float-right text-muted text-sm\">3h ago</span>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor...</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Latest Projects</h5> </div>
                        <table id=\"datatables-dashboard-projects\" class=\"table table-striped my-0\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class=\"d-none d-xl-table-cell\">Start Date</th>
                                <th class=\"d-none d-xl-table-cell\">End Date</th>
                                <th>Status</th>
                                <th class=\"d-none d-md-table-cell\">Assignee</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Project Apollo</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Carl Jenkins</td>
                            </tr>
                            <tr>
                                <td>Project Fireball</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-danger\">Cancelled</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project Hades</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            <tr>
                                <td>Project Nitro</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-warning\">In progress</span></td>
                                <td class=\"d-none d-md-table-cell\">Carl Jenkins</td>
                            </tr>
                            <tr>
                                <td>Project Phoenix</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project X</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            <tr>
                                <td>Project Romeo</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Ashley Briggs</td>
                            </tr>
                            <tr>
                                <td>Project Wombat</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-warning\">In progress</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project Zircon</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-danger\">Cancelled</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Sales / Revenue</h5> </div>
                        <div class=\"card-body d-flex w-100\">
                            <div class=\"align-self-center chart chart-lg\">
                                <canvas id=\"chartjs-dashboard-bar\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        \$(function() {
            // Bar chart
            new Chart(document.getElementById(\"chartjs-dashboard-bar\"), {
                type: \"bar\",
                data: {
                    labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                    datasets: [{
                        label: \"Last year\",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                    }, {
                        label: \"This year\",
                        backgroundColor: \"#E8EAED\",
                        borderColor: \"#E8EAED\",
                        hoverBackgroundColor: \"#E8EAED\",
                        hoverBorderColor: \"#E8EAED\",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            barPercentage: .75,
                            categoryPercentage: .5,
                            stacked: false,
                            gridLines: {
                                color: \"transparent\"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            \$(\"#datetimepicker-dashboard\").datetimepicker({
                inline: true,
                sideBySide: false,
                format: \"L\"
            });
        });
    </script>
    <script>
        \$(function() {
            // Line chart
            new Chart(document.getElementById(\"chartjs-dashboard-line\"), {
                type: \"line\",
                data: {
                    labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                    datasets: [{
                        label: \"Sales (\$)\",
                        fill: true,
                        backgroundColor: \"transparent\",
                        borderColor: window.theme.primary,
                        data: [2015, 1465, 1487, 1796, 1387, 2123, 2866, 2548, 3902, 4938, 3917, 4927]
                    }, {
                        label: \"Orders\",
                        fill: true,
                        backgroundColor: \"transparent\",
                        borderColor: window.theme.tertiary,
                        borderDash: [4, 4],
                        data: [928, 734, 626, 893, 921, 1202, 1396, 1232, 1524, 2102, 1506, 1887]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: \"rgba(0,0,0,0.05)\"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 500
                            },
                            display: true,
                            borderDash: [5, 5],
                            gridLines: {
                                color: \"rgba(0,0,0,0)\",
                                fontColor: \"#fff\"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            // Pie chart
            new Chart(document.getElementById(\"chartjs-dashboard-pie\"), {
                type: \"pie\",
                data: {
                    labels: [\"Direct\", \"Affiliate\", \"E-mail\", \"Other\"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger, \"#E8EAED\"
                        ],
                        borderColor: \"transparent\"
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            \$(\"#datatables-dashboard-projects\").DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <main class=\"content\">
        <div class=\"container-fluid p-0\">
            <div class=\"row mb-2 mb-xl-4\">
                <div class=\"col-auto d-none d-sm-block\">
                    <h3>Welcome back, Chris!</h3> </div>
                <div class=\"col-auto ml-auto text-right mt-n1\"> <span class=\"dropdown mr-2\">
      <button class=\"btn btn-light bg-white shadow-sm dropdown-toggle\" id=\"day\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"align-middle mt-n1\" data-feather=\"calendar\"></i> Today
      </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"day\">
        <h6 class=\"dropdown-header\">Settings</h6>
        <a class=\"dropdown-item\" href=\"#\">Action</a>
        <a class=\"dropdown-item\" href=\"#\">Another action</a>
        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
      </div>
    </span>
                    <button class=\"btn btn-primary shadow-sm\"> <i class=\"align-middle\" data-feather=\"filter\">&nbsp;</i> </button>
                    <button class=\"btn btn-primary shadow-sm\"> <i class=\"align-middle\" data-feather=\"refresh-cw\">&nbsp;</i> </button>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-primary\" data-feather=\"shopping-cart\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">2.562</h3>
                                    <div class=\"mb-0\">Sales Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-warning\" data-feather=\"activity\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">17.212</h3>
                                    <div class=\"mb-0\">Visitors Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-success\" data-feather=\"dollar-sign\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">\$ 24.300</h3>
                                    <div class=\"mb-0\">Total Earnings</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-danger\" data-feather=\"shopping-bag\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">43</h3>
                                    <div class=\"mb-0\">Pending Orders</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-xl d-none d-xxl-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-body py-4\">
                            <div class=\"media\">
                                <div class=\"d-inline-block mt-2 mr-3\"> <i class=\"feather-lg text-info\" data-feather=\"dollar-sign\"></i> </div>
                                <div class=\"media-body\">
                                    <h3 class=\"mb-2\">\$ 18.700</h3>
                                    <div class=\"mb-0\">Total Revenue</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-8 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\"> <span class=\"badge badge-primary float-right\">Monthly</span>
                            <h5 class=\"card-title mb-0\">Total Revenue</h5> </div>
                        <div class=\"card-body\">
                            <div class=\"chart chart-lg\">
                                <canvas id=\"chartjs-dashboard-line\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\"> <span class=\"badge badge-info float-right\">Today</span>
                            <h5 class=\"card-title mb-0\">Daily feed</h5> </div>
                        <div class=\"card-body\">
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar-5.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Ashley Briggs\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">5m ago</small> <strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong>
                                    <br /> <small class=\"text-muted\">Today 7:51 pm</small>
                                    <br /> </div>
                            </div>
                            <hr />
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Chris Wood\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">30m ago</small> <strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline
                                    <br /> <small class=\"text-muted\">Today 7:21 pm</small>
                                    <div class=\"border text-sm text-muted p-2 mt-1\"> Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing... </div>
                                </div>
                            </div>
                            <hr />
                            <div class=\"media\"> <img src=\"/admin/img/avatars/avatar-4.jpg\" width=\"36\" height=\"36\" class=\"rounded-circle mr-2\" alt=\"Stacie Hall\">
                                <div class=\"media-body\"> <small class=\"float-right text-navy\">1h ago</small> <strong>Stacie Hall</strong> posted a new blog
                                    <br /> <small class=\"text-muted\">Today 6:35 pm</small> </div>
                            </div>
                            <hr /> <a href=\"#\" class=\"btn btn-primary btn-block\">Load more</a> </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Calendar</h5> </div>
                        <div class=\"card-body d-flex\">
                            <div class=\"align-self-center w-100\">
                                <div class=\"chart\">
                                    <div id=\"datetimepicker-dashboard\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-xl-4 d-none d-xl-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Weekly sales</h5> </div>
                        <div class=\"card-body d-flex\">
                            <div class=\"align-self-center w-100\">
                                <div class=\"py-3\">
                                    <div class=\"chart chart-xs\">
                                        <canvas id=\"chartjs-dashboard-pie\"></canvas>
                                    </div>
                                </div>
                                <table class=\"table mb-0\">
                                    <thead>
                                    <tr>
                                        <th>Source</th>
                                        <th class=\"text-right\">Revenue</th>
                                        <th class=\"text-right\">Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-primary\"></i> Direct</td>
                                        <td class=\"text-right\">\$ 2602</td>
                                        <td class=\"text-right text-success\">+43%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-warning\"></i> Affiliate</td>
                                        <td class=\"text-right\">\$ 1253</td>
                                        <td class=\"text-right text-success\">+13%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-danger\"></i> E-mail</td>
                                        <td class=\"text-right\">\$ 541</td>
                                        <td class=\"text-right text-success\">+24%</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fas fa-square-full text-dark\"></i> Other</td>
                                        <td class=\"text-right\">\$ 1465</td>
                                        <td class=\"text-right text-success\">+11%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Appointments</h5> </div>
                        <div class=\"p-4 bg-light\">
                            <h2>You have a meeting today!</h2>
                            <p class=\"mb-0 text-sm\">Your next meeting is in 2 hours. Check your <a href=\"#\">schedule</a> to see the details.</p>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"timeline\">
                                <li class=\"timeline-item\"> <strong>Chat with Carl and Ashley</strong> <span class=\"float-right text-muted text-sm\">30m ago</span>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu...</p>
                                </li>
                                <li class=\"timeline-item\"> <strong>The big launch</strong> <span class=\"float-right text-muted text-sm\">2h ago</span>
                                    <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc...</p>
                                </li>
                                <li class=\"timeline-item\"> <strong>Coffee break</strong> <span class=\"float-right text-muted text-sm\">3h ago</span>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor...</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-lg-6 col-xl-8 d-flex\">
                    <div class=\"card flex-fill\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Latest Projects</h5> </div>
                        <table id=\"datatables-dashboard-projects\" class=\"table table-striped my-0\">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th class=\"d-none d-xl-table-cell\">Start Date</th>
                                <th class=\"d-none d-xl-table-cell\">End Date</th>
                                <th>Status</th>
                                <th class=\"d-none d-md-table-cell\">Assignee</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Project Apollo</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Carl Jenkins</td>
                            </tr>
                            <tr>
                                <td>Project Fireball</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-danger\">Cancelled</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project Hades</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            <tr>
                                <td>Project Nitro</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-warning\">In progress</span></td>
                                <td class=\"d-none d-md-table-cell\">Carl Jenkins</td>
                            </tr>
                            <tr>
                                <td>Project Phoenix</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project X</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            <tr>
                                <td>Project Romeo</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-success\">Done</span></td>
                                <td class=\"d-none d-md-table-cell\">Ashley Briggs</td>
                            </tr>
                            <tr>
                                <td>Project Wombat</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-warning\">In progress</span></td>
                                <td class=\"d-none d-md-table-cell\">Bertha Martin</td>
                            </tr>
                            <tr>
                                <td>Project Zircon</td>
                                <td class=\"d-none d-xl-table-cell\">01/01/2018</td>
                                <td class=\"d-none d-xl-table-cell\">31/06/2018</td>
                                <td><span class=\"badge badge-danger\">Cancelled</span></td>
                                <td class=\"d-none d-md-table-cell\">Stacie Hall</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6 col-xl-4 d-flex\">
                    <div class=\"card flex-fill w-100\">
                        <div class=\"card-header\">
                            <div class=\"card-actions float-right\">
                                <div class=\"dropdown show\">
                                    <a href=\"#\" data-toggle=\"dropdown\" data-display=\"static\"> <i class=\"align-middle\" data-feather=\"more-horizontal\"></i> </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"#\">Action</a> <a class=\"dropdown-item\" href=\"#\">Another action</a> <a class=\"dropdown-item\" href=\"#\">Something else here</a> </div>
                                </div>
                            </div>
                            <h5 class=\"card-title mb-0\">Sales / Revenue</h5> </div>
                        <div class=\"card-body d-flex w-100\">
                            <div class=\"align-self-center chart chart-lg\">
                                <canvas id=\"chartjs-dashboard-bar\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        \$(function() {
            // Bar chart
            new Chart(document.getElementById(\"chartjs-dashboard-bar\"), {
                type: \"bar\",
                data: {
                    labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                    datasets: [{
                        label: \"Last year\",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
                    }, {
                        label: \"This year\",
                        backgroundColor: \"#E8EAED\",
                        borderColor: \"#E8EAED\",
                        hoverBackgroundColor: \"#E8EAED\",
                        hoverBorderColor: \"#E8EAED\",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            barPercentage: .75,
                            categoryPercentage: .5,
                            stacked: false,
                            gridLines: {
                                color: \"transparent\"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            \$(\"#datetimepicker-dashboard\").datetimepicker({
                inline: true,
                sideBySide: false,
                format: \"L\"
            });
        });
    </script>
    <script>
        \$(function() {
            // Line chart
            new Chart(document.getElementById(\"chartjs-dashboard-line\"), {
                type: \"line\",
                data: {
                    labels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                    datasets: [{
                        label: \"Sales (\$)\",
                        fill: true,
                        backgroundColor: \"transparent\",
                        borderColor: window.theme.primary,
                        data: [2015, 1465, 1487, 1796, 1387, 2123, 2866, 2548, 3902, 4938, 3917, 4927]
                    }, {
                        label: \"Orders\",
                        fill: true,
                        backgroundColor: \"transparent\",
                        borderColor: window.theme.tertiary,
                        borderDash: [4, 4],
                        data: [928, 734, 626, 893, 921, 1202, 1396, 1232, 1524, 2102, 1506, 1887]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: \"rgba(0,0,0,0.05)\"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 500
                            },
                            display: true,
                            borderDash: [5, 5],
                            gridLines: {
                                color: \"rgba(0,0,0,0)\",
                                fontColor: \"#fff\"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            // Pie chart
            new Chart(document.getElementById(\"chartjs-dashboard-pie\"), {
                type: \"pie\",
                data: {
                    labels: [\"Direct\", \"Affiliate\", \"E-mail\", \"Other\"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger, \"#E8EAED\"
                        ],
                        borderColor: \"transparent\"
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        \$(function() {
            \$(\"#datatables-dashboard-projects\").DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script>
{% endblock %}", "backend/index.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/backend/index.html.twig");
    }
}
