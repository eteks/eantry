from django.shortcuts import render
from django.views.generic import TemplateView # Import TemplateView

# Create your views here.
# Add the two views we have been talking about  all this time :)
class Login_pageview(TemplateView):
    template_name = "login.html"

class Registration_pageview(TemplateView):
    template_name = "registration.html"

class Forgot_password_pageview(TemplateView): #view for sample template starts here
    template_name = "forgot_password.html"   

class Index_pageview(TemplateView):
	template_name = "index.html"

class Exportor_datos_pageview(TemplateView):
	template_name = "exportor_datos.html"

class Nueva_Factura_pageview(TemplateView):
	template_name = "nueva_factura.html"

class configuracion_pageview(TemplateView):
	template_name = "configuracion.html"

class perfil_pageview(TemplateView):
	template_name = "perfil.html"

class configuracion_contable_pageview(TemplateView):
	template_name = "configuracion_contable.html"

class Balance_pageview(TemplateView):
	template_name = "balance.html"		

class Nuevo_Ticket_pageview(TemplateView):
	template_name = "nuevo_ticket.html"		
