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

/* espace_restaurant/plats/plats.html.twig */
class __TwigTemplate_bba2aff4c6ed160195bcf7b27176b566752ee9185b964965e0926699c8d84f0f extends Template
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
        return "restaurant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_restaurant/plats/plats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_restaurant/plats/plats.html.twig"));

        $this->parent = $this->loadTemplate("restaurant.html.twig", "espace_restaurant/plats/plats.html.twig", 1);
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

        echo " !";
        
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
    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            var \$table1 = jQuery('#table-1');
// Initialize DataTable
            \$table1.DataTable({
                \"aLengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"All\"]],
                \"bStateSave\": true,
                dom: 'lBfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
// Initalize Select Dropdown after DataTables is created
            \$table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
    <h4 style=\"padding: 10px 0;\">Liste des plats</h4>
    <span><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurants_new");
        echo "\" class=\"btn btn-primary\">Ajouter un plat</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Id</th>
                <th class=\"sorting_asc\">Libele</th>
                <th class=\"sorting_disabled\">Description</th>
                <th class=\"sorting_disabled\">Prix</th>
                <th class=\"sorting_disabled\">Restaurant</th>


                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 45
            echo "            <tr class=\"odd gradeX\">
               
                <td style=\"vertical-align: middle;\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libele", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>

               <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"#\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>        
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <tr>
                <td colspan=\"5\">Pas de  plat</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Libele</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_restaurant/plats/plats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  168 => 58,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 45,  131 => 44,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'restaurant.html.twig' %}

{% block title %} !{% endblock %}

{% block body %}

    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            var \$table1 = jQuery('#table-1');
// Initialize DataTable
            \$table1.DataTable({
                \"aLengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"All\"]],
                \"bStateSave\": true,
                dom: 'lBfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
// Initalize Select Dropdown after DataTables is created
            \$table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
    <h4 style=\"padding: 10px 0;\">Liste des plats</h4>
    <span><a href=\"{{ path('restaurants_new') }}\" class=\"btn btn-primary\">Ajouter un plat</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Id</th>
                <th class=\"sorting_asc\">Libele</th>
                <th class=\"sorting_disabled\">Description</th>
                <th class=\"sorting_disabled\">Prix</th>
                <th class=\"sorting_disabled\">Restaurant</th>


                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for plat in plats %}
            <tr class=\"odd gradeX\">
               
                <td style=\"vertical-align: middle;\">{{plat.id}}</td>
                <td style=\"vertical-align: middle;\">{{plat.libele}}</td>
                <td style=\"vertical-align: middle;\">{{plat.description}}</td>
                <td style=\"vertical-align: middle;\">{{plat.prix}}</td>
                <td style=\"vertical-align: middle;\">{{plat.restaurant}}</td>

               <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"#\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>        
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"5\">Pas de  plat</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Libele</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>


{% endblock %}
", "espace_restaurant/plats/plats.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/espace_restaurant/plats/plats.html.twig");
    }
}
