from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
import csv
import json


app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=['http://localhost:3000'],
    allow_methods=['*'],
    allow_headers=['*']
)


f = open('f.json')
data = json.load(f)

@app.get("/")
async def root():
    return data
   

