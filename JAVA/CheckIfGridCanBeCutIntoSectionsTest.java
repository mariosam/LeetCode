/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckIfGridCanBeCutIntoSectionsTest {

    @Test
	public void testCheckIfGridCanBeCutIntoSections() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckIfGridCanBeCutIntoSections.checkValidCuts( 5, new int[][]{{1,0,5,2},{0,2,2,4},{3,2,5,3},{0,4,4,5}} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = CheckIfGridCanBeCutIntoSections.checkValidCuts( 4, new int[][]{{0,0,1,1},{2,0,3,4},{0,2,2,3},{3,0,4,3}} );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = CheckIfGridCanBeCutIntoSections.checkValidCuts( 4, new int[][]{{0,2,2,4},{1,0,3,2},{2,2,3,4},{3,0,4,2},{3,2,4,4}} );
        assertEquals(want, got);
	}

}
