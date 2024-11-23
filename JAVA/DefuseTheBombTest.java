/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class DefuseTheBombTest {

    @Test
	public void testDefuseTheBomb() throws Exception {
        //Test 1
        int[] want = new int[]{12,10,16,13};
        int[] got = DefuseTheBomb.decrypt( new int[]{5,7,1,4} , 3);
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{0,0,0,0};
        got = DefuseTheBomb.decrypt( new int[]{1,2,3,4}, 0 );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{12,5,6,13};
        got = DefuseTheBomb.decrypt( new int[]{2,4,9,3}, -2 );
        assertArrayEquals(want, got);
	}

}
