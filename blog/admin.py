from django.contrib import admin

from .models import Post


class PostAdmin(admin.ModelAdmin):
    list_display = (
        "title",
        "author",
        "body",
    )


admin.site.register(Post, PostAdmin)
from django.contrib import admin

admin.site.site_header = "Blog Matraman"
admin.site.site_title = "Admin Panel"
admin.site.index_title = "Dashboard Website"