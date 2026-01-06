---
layout: post
title: Summer MSc project (2025/26) heatwaves and vaccine coverage 
subtitle: 
gh-repo: kath-o-reilly/github.io
gh-badge: 
tags: projects
comments: true
mathjax: true
author: Kath O'Reilly
---



# Examining the Timeliness of Routine Vaccination During Heatwaves

## Research question and overall aims
The analysis seeks to determine whether children scheduled for routine vaccination during heatwave periods experience higher rates of delayed vaccination compared to those scheduled during non-heatwave periods.
1.  To scope publicly available datasets (ie. MICS and DHS) for time periods where heatwaves had been reported in country
2.  To define space-time windows when heat waves are occurring based on meteorological data
3.  To identify appropriate analysis plan to examine the effect of heatwaves on the timeliness of vaccination, while accounting for confounding factors
4.  To carry out preliminary analysis as planned in Obj 3.

## Data to be used
- Example cross-sectional data: Nigeria 2024 DHS (publicly available)
- Satellite data from Nigeria, [ERA5](https://cds.climate.copernicus.eu/datasets/reanalysis-era5-single-levels?tab=download)

## Methodology to be implemented
- Statistical analysis to account for “heatwave windows”, ie. distinct periods of time where temperature data indicate a heatwave in specific locations
- Regression analysis, accounting for 
- low numbers of “heatwave” observations
- confounders such as distance to health facilities, maternal education, and rural/urban status.

## References
- Short article describing heat waves in [Nigeria](https://www.carbonbrief.org/how-nigeria-is-reeling-from-extreme-heat-fuelled-by-climate-change/)
- Imran H, Raja D, Grassly NC, Wadood MZ, Safdar RM, O'Reilly KM. Routine immunization in Pakistan: comparison of multiple data sources and identification of factors associated with vaccination. Int Health. 2018 Mar 1;10(2):84-91. doi: 10.1093/inthealth/ihx067. PMID: 29432552; PMCID: PMC5856161.
- Note that ref below includes some detail about how to identify a heatwave window, among other [analyses](https://www.imperial.ac.uk/media/imperial-college/grantham-institute/public/publications/institute-reports-and-analytical-notes/Climate-change-tripled-heat-related-deaths-in-early-summer-European-heatwave.pdf)

### Data cleaning requirements
- Some: DHS data will require exploration. ERA5 data will require interaction with the API to extract the appropriate data (using Python)

### Software requirements
- Analysis can be done using R or Python.
