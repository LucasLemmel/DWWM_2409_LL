﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryPapillon
{
    public abstract class StadeDEvolution
    {
        public StadeDEvolution() 
        {
            
        }
        public abstract void SeDeplacer();
        public abstract StadeDEvolution SeMetamorphoser();
    }
}
