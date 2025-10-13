/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class TakingMaximumEnergyFromTheMysticDungeonTest {

    @Test
	public void testTakingMaximumEnergyFromTheMysticDungeon() throws Exception {
        //Test 1
        int want = 3;
        int got = TakingMaximumEnergyFromTheMysticDungeon.maximumEnergy( new int[]{5,2,-10,-5,1}, 3 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = TakingMaximumEnergyFromTheMysticDungeon.maximumEnergy( new int[]{-2,-3,-1}, 2 );
        assertEquals(want, got);
	}

}
