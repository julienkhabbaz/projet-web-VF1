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

/* admin/restaurant/index.html.twig */
class __TwigTemplate_d0b923d718882c5e6d948c1a7b7da8b3ff3b068aef9b4d3cb45b7ba70b84a769 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/restaurant/index.html.twig", 1);
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

        echo " Liste";
        
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
    <h4 style=\"padding: 10px 0;\">Liste des restaurants</h4>
    <span><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_new");
        echo "\" class=\"btn btn-primary\">Ajouter un restaurant</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Logo</th>
                <th class=\"sorting_asc\">Id</th>
                <th class=\"sorting_disabled\">Nom</th>
                 <th class=\"sorting_disabled\">Description</th>

                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 42, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 43
            echo "            <tr class=\"odd gradeX\">
                ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["restaurant"], "filename", [], "any", false, false, false, 44)) {
                // line 45
                echo "\t\t\t\t<td style=\"vertical-align: middle;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["restaurant"], "imageFile"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 50px; height:auto;\"></td>
                ";
            } else {
                // line 47
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/restaurants/empty.png", "medium"), "html", null, true);
                echo "\" alt=\"Logo\" style=\"width: 50px; height:60px;\">


                ";
            }
            // line 51
            echo "                <td style=\"vertical-align: middle;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td style=\"vertical-align: middle;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Vaisselle</a>
        
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <tr>
                <td colspan=\"5\">pas de restaurants</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Email</th>
            <th>Adresse</th>
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
        return "admin/restaurant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  181 => 61,  171 => 56,  167 => 55,  162 => 53,  158 => 52,  153 => 51,  145 => 47,  139 => 45,  137 => 44,  134 => 43,  129 => 42,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %} Liste{% endblock %}

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
    <h4 style=\"padding: 10px 0;\">Liste des restaurants</h4>
    <span><a href=\"{{ path('restaurant_new') }}\" class=\"btn btn-primary\">Ajouter un restaurant</a></span>
    <table class=\"table table-bordered datatable\" id=\"table-1\">
        <thead>
            <tr>
                <th class=\"sorting_disabled\">Logo</th>
                <th class=\"sorting_asc\">Id</th>
                <th class=\"sorting_disabled\">Nom</th>
                 <th class=\"sorting_disabled\">Description</th>

                <th class=\"col-md-3\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for restaurant in restaurants|reverse %}
            <tr class=\"odd gradeX\">
                {% if restaurant.filename %}
\t\t\t\t<td style=\"vertical-align: middle;\"><img src=\"{{ vich_uploader_asset(restaurant,'imageFile') }}\" alt=\"card-img-top\" style=\"width: 50px; height:auto;\"></td>
                {% else %}
\t\t\t\t<img src=\"{{ '/images/restaurants/empty.png' | imagine_filter('medium') }}\" alt=\"Logo\" style=\"width: 50px; height:60px;\">


                {% endif %}
                <td style=\"vertical-align: middle;\">{{ restaurant.id }}</td>
                <td style=\"vertical-align: middle;\">{{ restaurant.name }}</td>
                <td style=\"vertical-align: middle;\">{{ restaurant.description }}</td>
                <td class=\"col-md-3\" style=\"vertical-align: middle; text-align: center;\">
                    <a href=\"{{ path('restaurant_edit', {'id': restaurant.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Éditer</a>
                    <a href=\"{{ path('restaurant_delete', {'id': restaurant.id}) }}\" class=\"btn btn-primary btn-sm btn-icon icon-left\"> <i class=\"entypo-pencil\"></i>Vaisselle</a>
        
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"5\">pas de restaurants</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Logo</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>


{% endblock %}
", "admin/restaurant/index.html.twig", "/home/hicham/Documents/Fiverr work/livraison_repas/templates/admin/restaurant/index.html.twig");
    }
}
