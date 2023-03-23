/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CanPlaceFlowersTest {

    @Test
	public void testCanPlaceFlowers() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CanPlaceFlowers.canPlaceFlowers( new int[]{1,0,0,0,1}, 1 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CanPlaceFlowers.canPlaceFlowers( new int[]{1,0,0,0,1}, 2 );
        assertEquals(want, got);
	}

}
