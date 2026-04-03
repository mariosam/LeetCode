/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckifStringsCanBeMadeEqualWithOperationsIITest {

    @Test
	public void testCheckifStringsCanBeMadeEqualWithOperationsII() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckifStringsCanBeMadeEqualWithOperationsII.checkStrings( "abcdba", "cabdab" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CheckifStringsCanBeMadeEqualWithOperationsII.checkStrings( "abe", "bea" );
        assertEquals(want, got);
	}

}
