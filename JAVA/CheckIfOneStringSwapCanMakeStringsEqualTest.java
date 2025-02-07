/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckIfOneStringSwapCanMakeStringsEqualTest {

    @Test
	public void testCheckIfOneStringSwapCanMakeStringsEqual() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckIfOneStringSwapCanMakeStringsEqual.areAlmostEqual( "bank", "kanb" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CheckIfOneStringSwapCanMakeStringsEqual.areAlmostEqual( "attack", "defend" );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = CheckIfOneStringSwapCanMakeStringsEqual.areAlmostEqual( "kelb", "kelb" );
        assertEquals(want, got);
	}

}
