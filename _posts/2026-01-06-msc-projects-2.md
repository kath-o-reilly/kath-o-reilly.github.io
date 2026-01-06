---
layout: post
title: Summer MSc project (2025/26) seasonality of movements and role in infectious disease transmission 
subtitle: 
gh-repo: kath-o-reilly/github.io
gh-badge: 
tags: projects
comments: true
mathjax: true
author: Kath O'Reilly
---


# Seasonality of movements and role in infectious disease transmission 

## Research question and overall aims
The analysis seeks to explore the extent of seasonal movements influencing infectious disease spread and the potential for satellite imagary data to inform this. Seasonal movements have been suggested as important drivers for infectious diseases especially in the African continent, but there are limited primary data sources [1]. Instead, satellite imagery, aka nightlight data, have been suggested as alternative data sources that approximate changes in population sizes that are consistent with seasonal human movement [2, 3]. If measurable changes in light intensity are observable, how should these seasonal changes in movement be incorporated into static models of population mobility (ie. gravity or radiation models)? The project objectives are to,
1.  Extract nightlight data from open source repositories (eg. ESRI [4]) and use post-processing techniques [3] to translate to a useable format of seasonal changes in flows
2.  Explore whether specific geographic attributes (eg. population density) correspond with stronger seasonal flows
3.  To propose how seasonal data can be integrated into static mobility models such as gravity or radiation models

## Data to be used
- [ESRI data](https://www.esri.com/arcgis-blog/products/arcgis-living-atlas/imagery/earth-by-night|)
- Satellite data could be compared to other publicly available mobility data, ie. from [WorldPop](https://www.worldpop.org/region/ebola/)

## Methodology to be implemented
- GIS processing
- Adapt formula for static models of mobiilty to time-varying data (involves mathematics)
- Potentially some model fitting (statistics, ie. MLE) to evaluate model against data 

## References
[1] Nipa KF, Mohammed M, Stephens P, Drake JM. Theory of infectious disease spillover at an ecological boundary: impacts of seasonality and cross-boundary movement. R Soc Open Sci. 2025 Sep 17;12(9):250209. doi: 10.1098/rsos.250209. PMID: 40969693; PMCID: PMC12441601.
[2] Bharti N, Tatem AJ, Ferrari MJ, Grais RF, Djibo A, Grenfell BT. Explaining seasonal fluctuations of measles in Niger using nighttime lights imagery. Science. 2011 Dec 9;334(6061):1424-7. doi: 10.1126/science.1210554. PMID: 22158822; PMCID: PMC3891598.
[3] Demetris Stathakis, Pavlos Baltas, Seasonal population estimates based on night-time lights, Computers, Environment and Urban Systems, Volume 68, 2018, Pages 133-141, https://doi.org/10.1016/j.compenvurbsys.2017.12.001.
[4] https://www.esri.com/arcgis-blog/products/arcgis-living-atlas/imagery/earth-by-night


### Data cleaning requirements
- Some: ESRI data will require some cleaning and post-processing, as described in [3]

### Software requirements
- Analysis can be done using R or Python.
