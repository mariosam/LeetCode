/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DeleteColumnsToMakeSortedIIITest {

    @Test
	public void testDeleteColumnsToMakeSortedIII() throws Exception {
        //Test 1
        long want = 3;
        long got = DeleteColumnsToMakeSortedIII.minDeletionSize( new String[]{"babca","bbazb"} );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = DeleteColumnsToMakeSortedIII.minDeletionSize( new String[]{"edcba"} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = DeleteColumnsToMakeSortedIII.minDeletionSize( new String[]{"ghi","def","abc"} );
        assertEquals(want, got);
	}

}
