import json
import sys

from sinesp_client import SinespClient

sc = SinespClient()
plate = "QWE2323"
result = sc.search(plate)
json_result = json.dumps(result)
print(json_result)
