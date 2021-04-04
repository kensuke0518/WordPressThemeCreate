'use strict';

import { gmenuFunc } from "./gmenuFunc";
import { desc2cellFunc } from "./desc2cellFunc";
import { darkFunc } from "./darkFunc";
import { searchFunc } from "./searchFunc";
import { cardClassFunc, cardBoxHeight } from "./cardClassFunc";

gmenuFunc();
desc2cellFunc();
darkFunc();
cardClassFunc();
cardBoxHeight();
if (location.pathname === '/') searchFunc()


