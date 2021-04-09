'use strict';

import { gmenuFunc } from "./gmenuFunc";
import { desc2cellFunc, hasDetailFunc } from "./desc2cellFunc";
import { darkFunc } from "./darkFunc";
import { searchFunc } from "./searchFunc";
import { cardClassFunc, cardBoxHeight } from "./cardClassFunc";
//import { adBlockFunc } from "./adBlockFunc";

gmenuFunc();
hasDetailFunc();
desc2cellFunc();
darkFunc();
cardClassFunc();
cardBoxHeight();
if (location.href === '') searchFunc();
//adBlockFunc();



