from django.urls import path

from .views import post_detail, post_list

urlpatterns = [
    path("post/<int:pk>/", post_detail, name="post_detail"),
    path("", post_list, name="home"),
]
from django.contrib import admin

admin.site.site_header = "Blog Matraman"
admin.site.site_title = "Admin Panel"
admin.site.index_title = "Dashboard Website"