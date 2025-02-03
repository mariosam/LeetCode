/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SpecialArrayITest {

    @Test
	public void testSpecialArrayI() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = SpecialArrayI.isArraySpecial( new int[]{1} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = SpecialArrayI.isArraySpecial( new int[]{2,1,4} );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = SpecialArrayI.isArraySpecial( new int[]{4,3,1,6} );
        assertEquals(want, got);
	}

}
