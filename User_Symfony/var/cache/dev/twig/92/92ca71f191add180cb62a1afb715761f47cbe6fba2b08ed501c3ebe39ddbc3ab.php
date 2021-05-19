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

/* backend/partials/topnav.html.twig */
class __TwigTemplate_55905579cbed6176d4d2700ca52616326b3e6bcc9f19d6cdcd9ecdaf6d475538 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/topnav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/partials/topnav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand navbar-light bg-white\">
    <a class=\"sidebar-toggle d-flex mr-2\"> <i class=\"hamburger align-self-center\"></i> </a>
    <form class=\"form-inline d-none d-sm-inline-block\">
        <input class=\"form-control form-control-no-border mr-sm-2\" type=\"text\" placeholder=\"Search projects...\" aria-label=\"Search\"> </form>
    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-toggle=\"dropdown\">
                    <div class=\"position-relative\"> <i class=\"align-middle\" data-feather=\"message-circle\"></i> <span class=\"indicator\">4</span> </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right py-0\" aria-labelledby=\"messagesDropdown\">
                    <div class=\"dropdown-menu-header\">
                        <div class=\"position-relative\"> 4 New Messages </div>
                    </div>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Ashley Briggs\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Ashley Briggs</div>
                                    <div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class=\"text-muted small mt-1\">15m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-2.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Carl Jenkins\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Carl Jenkins</div>
                                    <div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
                                    <div class=\"text-muted small mt-1\">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-4.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Stacie Hall\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Stacie Hall</div>
                                    <div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
                                    <div class=\"text-muted small mt-1\">4h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-3.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Bertha Martin\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Bertha Martin</div>
                                    <div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class=\"text-muted small mt-1\">5h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"dropdown-menu-footer\"> <a href=\"#\" class=\"text-muted\">Show all messages</a> </div>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-toggle=\"dropdown\">
                    <div class=\"position-relative\"> <i class=\"align-middle\" data-feather=\"bell-off\"></i> </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right py-0\" aria-labelledby=\"alertsDropdown\">
                    <div class=\"dropdown-menu-header\"> 4 New Notifications </div>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-danger\" data-feather=\"alert-circle\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Update completed</div>
                                    <div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
                                    <div class=\"text-muted small mt-1\">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-warning\" data-feather=\"bell\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Lorem ipsum</div>
                                    <div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class=\"text-muted small mt-1\">6h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-primary\" data-feather=\"home\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Login from 192.186.1.1</div>
                                    <div class=\"text-muted small mt-1\">8h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-success\" data-feather=\"user-plus\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">New connection</div>
                                    <div class=\"text-muted small mt-1\">Anna accepted your request.</div>
                                    <div class=\"text-muted small mt-1\">12h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"dropdown-menu-footer\"> <a href=\"#\" class=\"text-muted\">Show all notifications</a> </div>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-flag dropdown-toggle\" href=\"#\" id=\"languageDropdown\" data-toggle=\"dropdown\"> <img src=\"/admin/img/flags/us.png\" alt=\"English\" /> </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"languageDropdown\">
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/us.png\" alt=\"English\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">English</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/es.png\" alt=\"Spanish\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">Spanish</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/de.png\" alt=\"German\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">German</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/nl.png\" alt=\"Dutch\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">Dutch</span> </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-toggle=\"dropdown\"> <i class=\"align-middle\" data-feather=\"settings\"></i> </a>
                <a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-toggle=\"dropdown\"> <img src=\"/admin/img/avatars/avatar.jpg\" class=\"avatar img-fluid rounded-circle mr-1\" alt=\"Chris Wood\" /> <span class=\"text-dark\">Chris Wood</span> </a>
                <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"align-middle mr-1\" data-feather=\"user\"></i> Profile</a> <a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle mr-1\" data-feather=\"pie-chart\"></i> Analytics</a>
                    <div class=\"dropdown-divider\"></div> <a class=\"dropdown-item\" href=\"pages-settings.html\">Settings & Privacy</a> <a class=\"dropdown-item\" href=\"#\">Help</a> <a class=\"dropdown-item\" href=\"#\">Sign out</a> </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend/partials/topnav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand navbar-light bg-white\">
    <a class=\"sidebar-toggle d-flex mr-2\"> <i class=\"hamburger align-self-center\"></i> </a>
    <form class=\"form-inline d-none d-sm-inline-block\">
        <input class=\"form-control form-control-no-border mr-sm-2\" type=\"text\" placeholder=\"Search projects...\" aria-label=\"Search\"> </form>
    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-toggle=\"dropdown\">
                    <div class=\"position-relative\"> <i class=\"align-middle\" data-feather=\"message-circle\"></i> <span class=\"indicator\">4</span> </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right py-0\" aria-labelledby=\"messagesDropdown\">
                    <div class=\"dropdown-menu-header\">
                        <div class=\"position-relative\"> 4 New Messages </div>
                    </div>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Ashley Briggs\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Ashley Briggs</div>
                                    <div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class=\"text-muted small mt-1\">15m ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-2.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Carl Jenkins\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Carl Jenkins</div>
                                    <div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
                                    <div class=\"text-muted small mt-1\">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-4.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Stacie Hall\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Stacie Hall</div>
                                    <div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
                                    <div class=\"text-muted small mt-1\">4h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <img src=\"/admin/img/avatars/avatar-3.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Bertha Martin\"> </div>
                                <div class=\"col-10 pl-2\">
                                    <div class=\"text-dark\">Bertha Martin</div>
                                    <div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class=\"text-muted small mt-1\">5h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"dropdown-menu-footer\"> <a href=\"#\" class=\"text-muted\">Show all messages</a> </div>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-toggle=\"dropdown\">
                    <div class=\"position-relative\"> <i class=\"align-middle\" data-feather=\"bell-off\"></i> </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right py-0\" aria-labelledby=\"alertsDropdown\">
                    <div class=\"dropdown-menu-header\"> 4 New Notifications </div>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-danger\" data-feather=\"alert-circle\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Update completed</div>
                                    <div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
                                    <div class=\"text-muted small mt-1\">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-warning\" data-feather=\"bell\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Lorem ipsum</div>
                                    <div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class=\"text-muted small mt-1\">6h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-primary\" data-feather=\"home\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">Login from 192.186.1.1</div>
                                    <div class=\"text-muted small mt-1\">8h ago</div>
                                </div>
                            </div>
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <div class=\"row no-gutters align-items-center\">
                                <div class=\"col-2\"> <i class=\"text-success\" data-feather=\"user-plus\"></i> </div>
                                <div class=\"col-10\">
                                    <div class=\"text-dark\">New connection</div>
                                    <div class=\"text-muted small mt-1\">Anna accepted your request.</div>
                                    <div class=\"text-muted small mt-1\">12h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"dropdown-menu-footer\"> <a href=\"#\" class=\"text-muted\">Show all notifications</a> </div>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-flag dropdown-toggle\" href=\"#\" id=\"languageDropdown\" data-toggle=\"dropdown\"> <img src=\"/admin/img/flags/us.png\" alt=\"English\" /> </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"languageDropdown\">
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/us.png\" alt=\"English\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">English</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/es.png\" alt=\"Spanish\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">Spanish</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/de.png\" alt=\"German\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">German</span> </a>
                    <a class=\"dropdown-item\" href=\"#\"> <img src=\"/admin/img/flags/nl.png\" alt=\"Dutch\" width=\"20\" class=\"align-middle mr-1\" /> <span class=\"align-middle\">Dutch</span> </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-toggle=\"dropdown\"> <i class=\"align-middle\" data-feather=\"settings\"></i> </a>
                <a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-toggle=\"dropdown\"> <img src=\"/admin/img/avatars/avatar.jpg\" class=\"avatar img-fluid rounded-circle mr-1\" alt=\"Chris Wood\" /> <span class=\"text-dark\">Chris Wood</span> </a>
                <div class=\"dropdown-menu dropdown-menu-right\"> <a class=\"dropdown-item\" href=\"pages-profile.html\"><i class=\"align-middle mr-1\" data-feather=\"user\"></i> Profile</a> <a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle mr-1\" data-feather=\"pie-chart\"></i> Analytics</a>
                    <div class=\"dropdown-divider\"></div> <a class=\"dropdown-item\" href=\"pages-settings.html\">Settings & Privacy</a> <a class=\"dropdown-item\" href=\"#\">Help</a> <a class=\"dropdown-item\" href=\"#\">Sign out</a> </div>
            </li>
        </ul>
    </div>
</nav>", "backend/partials/topnav.html.twig", "/Applications/MAMP/htdocs/projet_symfony/User_Symfony/templates/backend/partials/topnav.html.twig");
    }
}
