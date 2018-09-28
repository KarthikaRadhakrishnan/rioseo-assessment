<?php

/* Admin/Location/location-list.twig */
class __TwigTemplate_3e53fe452a31b5466d611990fbc92c6155a1531ab3b2665ad8d7d8a900a85ce2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Admin/index.twig", "Admin/Location/location-list.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-map-marker\"></i>
              All Locations
               <span id=\"flashMsg\" class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, ($context["flashClass"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["flash"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["flashClass"] ?? null)] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
        echo "</span>
                      <div style=\"float:right;\">
              <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("createLocation"), "html", null, true);
        echo "\" class=\"btn btn-info\">Add New Location</a>
          </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Location Name</th>
                      <th>Address</th>
                      <th>City</th>
                       <th>State</th>
                       <th>Latitude</th>
                      <th>Longitude</th>
                       <th>Phone</th>
                        <th>Country</th>
                         <th>Postal Code</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            ";
        // line 35
        if (($context["locations"] ?? null)) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 37
                echo "                    <tr>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "location_name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "address", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "city", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "state", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "latitude", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "longitude", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "phone", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "country", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "postal_code", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("editLocation", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteLocation";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteLocation(";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo ");\">
                                 <input type=\"hidden\" id=\"deletePath_";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", array()), "html", null, true);
                echo "\" name=\"deletePath\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("deleteLocation", array("id" => twig_get_attribute($this->env, $this->source, $context["row"], "id", array()))), "html", null, true);
                echo "\">
                            </form>
                            
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
                    ";
        } else {
            // line 59
            echo "                        <p>No records found</p>
                ";
        }
        // line 61
        echo "                    </tbody>
                </table>
                </div>
                </div>
                </div>

";
    }

    public function getTemplateName()
    {
        return "Admin/Location/location-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  157 => 59,  153 => 57,  139 => 52,  135 => 51,  131 => 50,  126 => 48,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  86 => 38,  83 => 37,  78 => 36,  76 => 35,  49 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Admin/index.twig\" %}

{% block content %}
<!-- DataTables Example -->
          <div class=\"card mb-3\">
            <div class=\"card-header\">
              <i class=\"fas fa-map-marker\"></i>
              All Locations
               <span id=\"flashMsg\" class=\"alert alert-{{flashClass}}\">{{ flash[flashClass][0] }}</span>
                      <div style=\"float:right;\">
              <a href=\"{{path_for('createLocation')}}\" class=\"btn btn-info\">Add New Location</a>
          </div>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                       <th>Id</th>
                      <th>Location Name</th>
                      <th>Address</th>
                      <th>City</th>
                       <th>State</th>
                       <th>Latitude</th>
                      <th>Longitude</th>
                       <th>Phone</th>
                        <th>Country</th>
                         <th>Postal Code</th>
                      <th data-orderable=\"false\"></th> 
                       <th data-orderable=\"false\"></th> 
                    </tr>
                  </thead>
                  
                   <tbody>
            {% if locations %}
            {% for row in locations %}
                    <tr>
                        <td>{{ row.id }}</td>
                        <td>{{ row.location_name }}</td>
                        <td>{{ row.address }}</td>
                        <td>{{ row.city }}</td>
                        <td>{{ row.state }}</td>
                        <td>{{ row.latitude }}</td>
                        <td>{{ row.longitude }}</td>
                        <td>{{ row.phone }}</td>
                        <td>{{ row.country }}</td>
                        <td>{{ row.postal_code}}</td>
                        <td><a href=\"{{path_for('editLocation', {'id': row.id})}}\" class=\"btn btn-info\">Edit</a></td>
                        <td>
                            <form action=\"?\" method=\"POST\" id=\"deleteLocation{{row.id}}\"> 
                                <input class=\"btn btn-danger\" type = \"button\" value =\"Delete\" onclick=\"deleteLocation({{row.id}});\">
                                 <input type=\"hidden\" id=\"deletePath_{{row.id}}\" name=\"deletePath\" value=\"{{ path_for('deleteLocation', { 'id': row.id })}}\">
                            </form>
                            
                        </td>
                    </tr>
                {% endfor %} 
                    {% else %}
                        <p>No records found</p>
                {% endif %}
                    </tbody>
                </table>
                </div>
                </div>
                </div>

{% endblock content %}", "Admin/Location/location-list.twig", "C:\\xampp\\htdocs\\projects\\rioseo-assessment\\app\\templates\\Admin\\Location\\location-list.twig");
    }
}
