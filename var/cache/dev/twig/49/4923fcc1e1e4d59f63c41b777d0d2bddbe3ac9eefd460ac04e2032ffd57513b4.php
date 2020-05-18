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

/* registration/register_type.html.twig */
class __TwigTemplate_e3b55b0810f0cca8818a24da2b6d8c5f5fd16b1c9fca4c9cebd5c3604ad3df51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_type.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_type.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_type.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row mt-5\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Vous êtes ?</h2>
                  
                  
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_register");
        echo "\">Restaurant</a>

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                          <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Client</a>
                        </div>
                     


                </div>
        

            </div>
        </div>
    </section>


 <div class=\"section rainbow\">
        <svg version=\"1.1\" viewBox=\"0 0 1440 335\">
            <g>
                <polygon fill=\"#FA0029\" points=\"0.2,218.7 503.7,174.6 0.2,0\"></polygon>
                <polygon fill=\"#FF5959\" points=\"0.2,207.7 0.2,275.2 503.7,174.6\"></polygon>
                <polygon fill=\"#FF9E16\" points=\"503.7,174.6 1440,259.9 1440,88\"></polygon>
                <polygon fill=\"#FFD700\" points=\"503.7,174.6 1440,88 1440,22.3\"></polygon>
                <polygon fill=\"#95D600\" points=\"0.2,320.1 0.2,333.5 218,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#00AC41\" points=\"0.2,271.2 0.2,320.1 503.7,174.6\"></polygon>
                <polygon fill=\"#7DCAEC\" points=\"968.4,333.5 1377,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2F7DE1\" points=\"439.5,333.5 762.9,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#E2E71F\" points=\"184.8,333.5 148.8,333.5 439.5,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2BACE4\" points=\"762.9,333.5 968.4,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#FF5000\" points=\"1377,333.5 1440,333.5 1440,252.9 503.7,174.6\"></polygon>
            </g>
        </svg>
    </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  98 => 15,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

 <section class=\"formContent\">
        <div class=\"container\">
            <div class=\"row mt-5\">
                <div class=\"col-md-10 offset-2\">
                    <h2>Vous êtes ?</h2>
                  
                  
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                            <a href=\"{{ path('restaurant_register') }}\">Restaurant</a>

                        </div>
                        <div class=\"form-group col-ms-6 col-md-8 col-lg-10\">
                          <a href=\"{{ path('app_register') }}\">Client</a>
                        </div>
                     


                </div>
        

            </div>
        </div>
    </section>


 <div class=\"section rainbow\">
        <svg version=\"1.1\" viewBox=\"0 0 1440 335\">
            <g>
                <polygon fill=\"#FA0029\" points=\"0.2,218.7 503.7,174.6 0.2,0\"></polygon>
                <polygon fill=\"#FF5959\" points=\"0.2,207.7 0.2,275.2 503.7,174.6\"></polygon>
                <polygon fill=\"#FF9E16\" points=\"503.7,174.6 1440,259.9 1440,88\"></polygon>
                <polygon fill=\"#FFD700\" points=\"503.7,174.6 1440,88 1440,22.3\"></polygon>
                <polygon fill=\"#95D600\" points=\"0.2,320.1 0.2,333.5 218,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#00AC41\" points=\"0.2,271.2 0.2,320.1 503.7,174.6\"></polygon>
                <polygon fill=\"#7DCAEC\" points=\"968.4,333.5 1377,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2F7DE1\" points=\"439.5,333.5 762.9,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#E2E71F\" points=\"184.8,333.5 148.8,333.5 439.5,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#2BACE4\" points=\"762.9,333.5 968.4,333.5 503.7,174.6\"></polygon>
                <polygon fill=\"#FF5000\" points=\"1377,333.5 1440,333.5 1440,252.9 503.7,174.6\"></polygon>
            </g>
        </svg>
    </div>
 {% endblock %}  ", "registration/register_type.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/registration/register_type.html.twig");
    }
}
