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
	
class Nueva_Factura_pageview(TemplateView):
	template_name = "nueva_factura.html"		
