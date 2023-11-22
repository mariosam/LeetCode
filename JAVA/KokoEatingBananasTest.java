/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KokoEatingBananasTest {

    @Test
	public void testKokoEatingBananas() throws Exception {
        //Test 1
        int want = 4;
        int got = KokoEatingBananas.minEatingSpeed( new int[]{3,6,7,11}, 8 );
        assertEquals(want, got);
        //Test 2
        want = 30;
        got = KokoEatingBananas.minEatingSpeed( new int[]{30,11,23,4,20}, 5 );
        assertEquals(want, got);
        //Test 3
        want = 23;
        got = KokoEatingBananas.minEatingSpeed( new int[]{30,11,23,4,20}, 6 );
        assertEquals(want, got);
	}

}
