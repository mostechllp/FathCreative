import os

files_to_schemas = {
    'services.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  }]
}
</script>''',
    'event-management.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Event Management",
    "item": "https://www.fathcreative.com/event-management"  
  }]
}
</script>''',
    'exhibition-tradeshows.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Exhibition & Tradeshow",
    "item": "https://www.fathcreative.com/exhibition-tradeshows"  
  }]
}
</script>''',
    'posm-activities.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "POSM Activities",
    "item": "https://www.fathcreative.com/posm-activities"  
  }]
}
</script>''',
    'brand-activations.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Brand Activations",
    "item": "https://www.fathcreative.com/brand-activations"  
  }]
}
</script>''',
    '3D-designs.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "3D Designs",
    "item": "https://www.fathcreative.com/3D-designs"  
  }]
}
</script>''',
    'fabrication-and-production.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Fabrication And Production",
    "item": "https://www.fathcreative.com/fabrication-and-production"  
  }]
}
</script>''',
    'technology-solutions.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Technology Solutions",
    "item": "https://www.fathcreative.com/technology-solutions"  
  }]
}
</script>''',
    'digital-marketing-solutions.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Services",
    "item": "https://www.fathcreative.com/services"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Digital Marketing",
    "item": "https://www.fathcreative.com/digital-marketing-solutions"  
  }]
}
</script>''',
    'projects.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Projects",
    "item": "https://www.fathcreative.com/projects"  
  }]
}
</script>''',
    'contact.php': '''<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.fathcreative.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Projects",
    "item": "https://www.fathcreative.com/projects"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Contact Us",
    "item": "https://www.fathcreative.com/contact"  
  }]
}
</script>'''
}

import re
path = r"d:\fath\public_html"
for filename, schema in files_to_schemas.items():
    filepath = os.path.join(path, filename)
    if os.path.exists(filepath):
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # We find the ?> closing tag after header.php include
        # It's usually like include('header.php'); \n?> or include('header.php');\n?>
        pattern = r"(include\('header\.php'\);\s*\?>)"
        if schema not in content:
            new_content = re.sub(pattern, r"\1\n" + schema, content, count=1)
            if new_content != content:
                with open(filepath, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                print(f"Updated {filename}")
            else:
                print(f"Pattern not found in {filename}")
        else:
            print(f"Already updated {filename}")
    else:
        print(f"File not found: {filename}")
