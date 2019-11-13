using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Net.Http;

namespace CheckpointService.Controllers
{
    //[Route("CheckpointConnection/")]
    [ApiController]
    public class CheckpointConnectionController : ControllerBase
    {
        [Route("CheckpointConnection")]
        [HttpGet]
        public string Get()
        {
            return "get method";
        }

        [HttpPost]
        [Route("CheckpointConnection/send")]
        public void send([FromBody]Models.CheckpointInfo content)
        {
            
        }


    }

}
